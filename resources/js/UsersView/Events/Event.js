import React, { useState, useEffect } from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";

function Event({ path, title, date, eventId }) {
    return (
        <div
            className="event"
            style={{
                background: `linear-gradient(to right, rgba(0, 0, 0, 0.424), rgba(0, 0, 0, 0.424)), url(${path})`,

                backgroundSize: "cover",
                backgroundPosition: "center",
            }}
        >
            <p className="event__date">{date}</p>
            <p className="event__name">{title}</p>

            <a className="event__link" href={"/events/" + eventId}>
                <button className="event__button">Read more</button>
            </a>
        </div>
    );
}

export default Event;
