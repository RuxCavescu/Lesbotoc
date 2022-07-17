import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
import AboutTeam from "./Home/AboutTeam";
import PopularEvents from "./Home/PopularEvents";
import Hero from "./Home/Hero";

function Home() {
    return (
        <div className="main__home">
            <Hero path="images/pride/pride_parade.jpg" />
            <AboutTeam />
            <PopularEvents />
        </div>
    );
}

export default Home;
