import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";

function Navbar() {
    return (
        <nav className="users__navbar">
            <div className="navbar__links">
                <a className="link" href="/">
                    Home
                </a>
                <a className="link" href="/events">
                    Events
                </a>
                <a className="link" href="/about-us">
                    About Us
                </a>
            </div>
        </nav>
    );
}

export default Navbar;
