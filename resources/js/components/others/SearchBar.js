import React from 'react';
import PropTypes from 'prop-types';

function SearchBar({groupOnChange, searchBarOnChange, selectedGroup}) {

    function handleSearchBarOnChange(event) {
        searchBarOnChange(event.target.value)
    }

    function handleGroupOnChange(event) {
        groupOnChange(event.target.value)
    }

    return (
        <div className="border w-full rounded-lg py-2 px-4 flex flex-col lg:flex-row lg:justify-between items-center lg:mb-0 mb-2">
          <div className="flex items-center flex-1 w-full">
            <div className="inline-block mr-2">
              <svg className="w-6 h-6 stroke-current text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <form className="flex-auto w-full" >
              <input
                className="py-4 px-4 w-full"
                type="search"
                placeholder="Mau mengerjakan apa hari ini?"
                onChange={handleSearchBarOnChange}
            />
            </form>
          </div>
          <div className="lg:border-l lg:ml-4 pl-4">
            <label htmlFor="group-select" className="mr-2">Kelas:</label>
            <select id="group-select"
              className="bg-white text-blue-600 font-semibold border p-1 rounded text-center"
              onChange={handleGroupOnChange}
              value={selectedGroup}
            >
              <option value="all">Semua</option>
              <option value="a">A</option>
              <option value="b">B</option>
            </select>
          </div>
        </div>
    );
}

SearchBar.propTypes = {
    searchBarOnChange: PropTypes.func.isRequired,
    selectedGroup: PropTypes.string,
    groupOnChange: PropTypes.func.isRequired
}

export default SearchBar;
