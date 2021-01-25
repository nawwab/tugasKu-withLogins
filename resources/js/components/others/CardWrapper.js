import React from 'react'
import PropTypes from 'prop-types'
import Card from "./Card"

function CardWrapper({adminMode, cardsData, emptyComponent}) {
    let listsCard
    if (cardsData.length > 0) {
        listsCard = cardsData.map(card => {
            return (
            <div className="flex items-center w-full" key={card.id}>
                <Card
                    abbrev = {card.abbrev}
                    deadline_date = {card.deadline_date}
                    deadline_time = {card.deadline_time}
                    details = {card.details}
                    file_attachments = {card.file_attachments}
                    group = {card.group}
                    source = {card.source}
                    subject = {card.subject}
                    user_id = {card.user_id}
                />
                { !adminMode ||
                <div className="flex flex-col ml-4">
                    <a href={card.route_edit} className="flex flex-row sm:flex-col items-center">
                        <svg className="w-8 h-8 stroke-current text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                }
            </div>
            )
        })
    } else if (cardsData.length === 0) {
        listsCard = emptyComponent
    }

    return (
      <div className="w-full flex flex-col items-center">
        {listsCard}
      </div>
    );
}

CardWrapper.propTypes = {
    adminMode: PropTypes.bool,
    cards: PropTypes.arrayOf(PropTypes.object),
    emptyComponent: PropTypes.element,
}

CardWrapper.defaultProps = {
    adminMode: false,
    cards: [],
    emptyComponent: <h1>Data yang anda cari tidak ditemukan</h1>
}

export default CardWrapper;
