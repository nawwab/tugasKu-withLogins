import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import SearchBar from "./others/SearchBar";
import CardWrapper from "./others/CardWrapper";
import Testimony from "./others/Testimony";
import AdminNoDataFound from "./others/AdminNoDataFound.js";
import EmptyMessage from "./others/EmptyMessage";
import PropTypes from "prop-types";

function CardSearcher({ data, isAdmin }) {
    const [tasks, setTasks] = useState([]);
    const [filtered, setFiltered] = useState([]);
    const [isLoaded, setIsLoaded] = useState(false);
    const [searchValue, setSearchValue] = useState("");
    const [groupValue, setGroupValue] = useState("all");
    const [noDataFoundComponent, setNoDataFoundComponent] = useState(() => (
        <Testimony />
    ));

    useEffect(() => {
        setTasks(JSON.parse(data));
        setIsLoaded(true);
    }, []);

    function handleSearchChange(value) {
        setSearchValue(value);
    }

    useEffect(() => {
        let filteredTasks = [];
        if (searchValue) {
            filteredTasks = tasks.filter((task) => {
                const regex = new RegExp(searchValue, "gi");
                let abbrev = task.abbrev ? task.abbrev : "";
                return abbrev.match(regex) || task.subject.match(regex);
            });
            setNoDataFoundComponent(<EmptyMessage />);
        } else {
            setNoDataFoundComponent( isAdmin ? <AdminNoDataFound /> : <Testimony />);
        }

        if (groupValue !== "all") {
            filteredTasks = filteredTasks.filter((task) => {
                if (task.group) {
                    return task.group.toLowerCase() === groupValue;
                }
                return false;
            });
        }

        setFiltered(filteredTasks);
    }, [searchValue, groupValue]);

    function handleGroupChange(value) {
        setGroupValue(value);
    }

    return (
        isLoaded ? (
            <div className="flex flex-col">
                <div className="py-4">
                    <SearchBar
                        searchBarOnChange={handleSearchChange}
                        selectedGroup={groupValue}
                        groupOnChange={handleGroupChange}
                    />
                </div>
                <div className="lg:pt-4">
                    <CardWrapper
                        adminMode={isAdmin ? true : false}
                        cardsData={filtered}
                        emptyComponent={noDataFoundComponent}
                    />
                </div>
            </div>
        ) : (
            <div className="flex items-center justify-center py-4">
                <svg
                    className="w-6 h-6 animate-spin mr-2 stroke-current text-gray-500"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"
                    ></path>
                </svg>
                <span className="font-medium text-gray-500">
                    Memuat tugas...
                </span>
            </div>
        )
    )
}

export default CardSearcher;

CardSearcher.propTypes = {
    data: PropTypes.string,
    isAdmin: PropTypes.string,
}

if (document.getElementById("card-searcher")) {
    let data = document.getElementById("card-searcher").getAttribute("data");
    let isAdmin = document.getElementById("card-searcher").getAttribute("isadmin");
    ReactDOM.render(
        <CardSearcher data={data} isAdmin={isAdmin} />,
        document.getElementById("card-searcher")
    );
}
