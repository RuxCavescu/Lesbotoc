import React, { useState, useEffect, useContext } from "react";
import ReactDOM from "react-dom/client";
// import Navbar from "./Navbar";
import Event from "./Events/Event";
import EventDetail from "./Events/EventDetail";
import { BrowserRouter, Link, Route, Routes } from "react-router-dom";

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
            <EventDetail />
            <div className="intro">
                <h2 className="intro__headline">About our events</h2>
                <p className="intro__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tincidunt etiam commodo faucibus cras felis. Ornare id dolor
                    sit ut curabitur ac, arcu id at. Eget fermentum at duis
                    mattis posuere nisl venenatis pellentesque. Ipsum cras diam
                    sed sit faucibus ipsum, vitae dictum diam.
                </p>
            </div>

            <div className="event__container">
                {events &&
                    events.map((event, index) => {
                        return (
                            <Event
                                key={index}
                                date={event.start_date}
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
