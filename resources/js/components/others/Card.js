import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import PropTypes from "prop-types";

const documentIcon = (
    <svg
        className="w-4 h-4 mr-4 stroke-current text-blue-500"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            strokeLinecap="round"
            strokeLinejoin="round"
            strokeWidth="2"
            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
        ></path>
    </svg>
);

function Details({ details, file_attachments }) {
    let attachmentBox;

    if (file_attachments) {
        let attachmentIcon = documentIcon;

        attachmentBox = (
            <div className="flex bg-gray-100 mt-4 p-2 rounded-md items-center">
                {attachmentIcon}
                <a
                    href={`/file_attachments/${file_attachments}`}
                    download
                    className="text-sm font-medium"
                >
                    {file_attachments}
                </a>
            </div>
        );
    }

    return (
        <div className="p-4 border-t">
            <span className="text-sm">{details}</span>
            {attachmentBox == undefined || attachmentBox}
        </div>
    );
}

Details.propTypes = {
    details: PropTypes.string,
    file_attachments: PropTypes.string,
};

function Card({
    abbrev,
    deadline_date,
    deadline_time,
    group,
    source,
    subject,
    user_id,
    ...props
}) {
    let cardName;

    if (abbrev) {
        cardName = (
            <>
                <h2 className="text-4xl font-extrabold mr-2 leading-none">
                    {abbrev}
                </h2>
                <div className="flex flex-col">
                    {group === null || (
                        <span className="text-sm text-gray-400">
                            kelas <strong>{group}</strong>
                        </span>
                    )}
                    <span className="text-sm text-gray-400">({subject})</span>
                </div>
            </>
        );
    } else {
        cardName = (
            <>
                <h2 className="text-2xl font-extrabold mr-2 leading-none">
                    {subject}
                </h2>
                {group === null || (
                    <span className="text-sm text-gray-400">
                        kelas <strong>{group}</strong>
                    </span>
                )}
            </>
        );
    }

    return (
        <div className="bg-white flex-grow border rounded-lg mb-4 shadow-lg">
            <div className="px-4 py-2 rounded-t-lg mb-4 bg-green-500">
                <span className="text-white font-semibold">
                    {deadline_date} {deadline_time ? ", " + deadline_time : ""}
                </span>
            </div>
            <div className="flex items-center justify-between mb-4">
                <div className="px-4 flex items-center">{cardName}</div>
                {source ? (
                    <a href={source} className="pr-4">
                        <svg
                            className="w-6 h-6 stroke-current text-blue-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                            ></path>
                        </svg>
                    </a>
                ) : (
                    <></>
                )}
            </div>
            <Details {...props} />
        </div>
    );
}

Card.propTypes = {
    abbrev: PropTypes.string,
    deadline_date: PropTypes.string,
    deadline_time: PropTypes.string,
    group: PropTypes.string,
    source: PropTypes.string,
    subject: PropTypes.string,
};

export default Card;

if (document.getElementById("card-react")) {
    let data = document.getElementById("card-react").getAttribute("data");
    let props = JSON.parse(data);
    console.log(props);
    ReactDOM.render(
        <Card
            abbrev = {props.abbrev}
            deadline_date = {props.deadline_date}
            deadline_time = {props.deadline_time}
            details = {props.details}
            file_attachments = {props.file_attachments}
            group = {props.group}
            source = {props.source}
            subject = {props.subject}
            user_id = {props.user_id}
        />,
        document.getElementById("card-react")
    );
}
