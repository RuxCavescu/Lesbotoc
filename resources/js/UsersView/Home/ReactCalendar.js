import moment from "moment";
import React, { useState, useEffect } from "react";
import Calendar from "react-calendar";

function ReactCalendar() {
    const [date, setDate] = useState(new Date());
    const [events, setEvents] = useState(null);

    const loadEvents = async () => {
        const response = await fetch("/api/events");
        const responseData = await response.json();
        // console.log(responseData);
        setEvents(responseData);
    };

    useEffect(() => {
        loadEvents();
    }, [date]);

    const onChange = (date) => {
        setDate(date);
    };

    return (
        <div>
            <Calendar onChange={onChange} value={date} />
            {events &&
                events.map((event) => {
                    console.log(event.start_date);
                })}
            <div>{moment(date).format("YYYY-MM-DD")}</div>
        </div>
    );
}

export default ReactCalendar;
