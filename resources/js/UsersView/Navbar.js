import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";

function Navbar() {
    return (
        // <h1>This is the navbar</h1>
        <nav className="users__navbar">
            <a href="/">Home</a>
            <a href="/events">Events</a>
            <a href="/about-us">About Us</a>
            {/* <Link to={"/homepage"}>Home</Link>
                <Link to={"/events"}>Events</Link>
                <Link to={"/about-us"}>About Us</Link> */}
        </nav>
    );
}

export default Navbar;
