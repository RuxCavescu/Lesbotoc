import moment from "moment";
import React, { useState, useEffect } from "react";
import Calendar from "react-calendar";

function ReactCalendar() {
    const [date, setDate] = useState(new Date());
    const [events, setEvents] = useState(null);

    // const loadEvents = async (date) => {
    //     const response = await fetch(`/api/events/${date}`);
    //     const responseData = await response.json();
    //     console.log(responseData);
    //     setEvents(responseData);
    // };

    const loadEvents = async (value) => {
        console.log(value);
        const response = await fetch(
            `/api/events?date=` + moment(date).format("YYYY-MM-DD")
        );
        const responseData = await response.json();
        console.log(responseData);

        setEvents(responseData);
    };

    useEffect(() => {
        loadEvents(date);
    }, [date]);

    const handleChange = (date) => {
        setDate(date);
        // history.push("http://localhost:3000/events".date);
        // loadEvents();
    };

    return (
        <div className="calendar__display">
            <Calendar onChange={handleChange} value={date} />
            <div className="calendar__display-info">
                <h4>Events scheduled on {moment(date).format("YYYY-MM-DD")}</h4>
                {!events || events.length === 0 ? (
                    <div>'No events scheduled for this date'</div>
                ) : (
                    events &&
                    events.map((event, index) => {
                        return (
                            <div
                                className="calendar__display-event"
                                key={index}
                            >
                                <div
                                    style={{ width: "200px" }}
                                    className="calendar__display-image"
                                >
                                    <img
                                        src={event.image.path}
                                        style={{
                                            width: "200px",
                                            borderRadius: "5px",
                                        }}
                                        alt={event.image.alt}
                                    ></img>
                                    <a
                                        className="carousel__event-link"
                                        href={"/events/" + event.id}
                                    >
                                        <button
                                            className="carousel__event-button"
                                            style={{
                                                backgroundColor: "#142566",
                                                color: "white",
                                            }}
                                        >
                                            Read more
                                        </button>
                                    </a>
                                </div>

                                <div className="calendar__display-text">
                                    <h3>{event.title_en}</h3>
                                    <p>{event.description_en}</p>
                                </div>
                            </div>
                        );
                    })
                )}
            </div>
            {/* if(!events || events.length === 0) {<div>'No events today'</div>}
            else{" "}
            {events.map((event) => {
                <div>
                    <h3>{event.title_en}</h3>;<p>{event.description_en}</p>;
                </div>;
            })} */}
        </div>
    );
}

export default ReactCalendar;
