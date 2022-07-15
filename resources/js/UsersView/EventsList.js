import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
// import Navbar from "./Navbar";
import Event from "./Events/Event";

function EventsList() {
    return (
        <div className="main">
            {/* <Navbar /> */}
            <h1>This is the EventList component</h1>
            <Event />
        </div>
    );
}

export default EventsList;
