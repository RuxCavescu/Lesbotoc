// main component for the Users-Side Homepage React application
import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Navbar from "./Navbar";
import Home from "./Home";
import EventsList from "./EventsList";
import AboutUs from "./AboutUs";

function App() {
    return (
        <div>
            <h1>Main React Application</h1>
            <p>Users-Side Homepage React application</p>

            <BrowserRouter>
                <Navbar />
                <Routes>
                    <Route exact path="/" element={<Home />}></Route>
                    <Route
                        exact
                        path="/events"
                        element={<EventsList />}
                    ></Route>
                    <Route exact path="/about-us" element={<AboutUs />}></Route>
                </Routes>
            </BrowserRouter>
        </div>
    );
}

export default App;
