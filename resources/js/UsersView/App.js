// main component for the Users-Side Homepage React application
import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Navbar from "./Navbar";
import Home from "./Home";
import EventsList from "./EventsList";
import AboutUs from "./AboutUs";
import EventDetail from "./Events/EventDetail";

function App() {
    return (
        <div>
            <h1>Main React Application</h1>
            <p>Users-Side Homepage React application</p>

            <BrowserRouter>
                <Navbar />
                <Routes>
                    <Route exact path="/" element={<Home />} />
                    <Route exact path="/events" element={<EventsList />} />
                    <Route path="/events/:id" element={<EventDetail />} />
                    <Route exact path="/about-us" element={<AboutUs />} />
                </Routes>
            </BrowserRouter>
        </div>
    );
}

export default App;
