import React, { useState, useEffect, useContext } from "react";
import ReactDOM from "react-dom/client";
// import Navbar from "./Navbar";
import Event from "./Events/Event";
import EventDetail from "./Events/EventDetail";
import { BrowserRouter, Link, Route, Routes } from "react-router-dom";
import Moment from "moment";
import Hero from "../UsersView/Home/Hero";

function EventsList() {
    const [events, setEvents] = useState(null);

    const loadEvents = async () => {
        const response = await fetch("/api/events");
        const responseData = await response.json();
        console.log(responseData);
        setEvents(responseData);
    };

    useEffect(() => {
        loadEvents();
    }, []);

    return (
        <>
            <Hero
                path="images/women/holding_hands.jpg"
                text="See our events."
                position="center"
            />
            <div className="intro">
                <h2 className="intro__headline">About our events</h2>
                <p className="intro__text">
                    Check out our upcoming events and make sure to register in
                    advance.
                </p>
            </div>

            <div className="event__container">
                {events &&
                    events.map((event, index) => {
                        return (
                            <Event
                                key={index}
                                // date={event.start_date}
                                date={Moment(event.start_date).format(
                                    "Do MMMM YYYY"
                                )}
                                title={event.title_en}
                                path={event.image.path}
                                eventId={event.id}
                            />
                        );
                    })}
            </div>
        </>
    );
}

export default EventsList;
