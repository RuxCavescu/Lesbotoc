import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
import AboutTeam from "./Home/AboutTeam";
import PopularEvents from "./Home/PopularEvents";
import Hero from "./Home/Hero";
import Calendar from "./Home/Calendar";
import ReactCalendar from "./Home/ReactCalendar";
import "react-calendar/dist/Calendar.css";

function Home() {
    return (
        <div className="main__home">
            <Hero
                path="images/pride/pride_parade.jpg"
                text="Connect. <br/>Share. <br/>Make friends."
                position="bottom"
            />
            <AboutTeam />
            <PopularEvents />
            {/* <Calendar /> */}
            <ReactCalendar />
        </div>
    );
}

export default Home;
