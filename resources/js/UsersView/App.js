// main component for the Users-Side Homepage React application
import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Navbar from "./Navbar";
import Home from "./Home";
import EventsList from "./EventsList";
import AboutUs from "./AboutUs";
import EventDetail from "./Events/EventDetail";
import RegistrationConfirmed from "./Registrations/RegistrationConfirmed";
import RegistrationDeleted from "./Registrations/RegistrationDeleted";

function App() {
    return (
        <div className="main__content">
            <BrowserRouter>
                <Navbar />
                <Routes>
                    <Route exact path="/" element={<Home />} />
                    <Route exact path="/events" element={<EventsList />} />
                    <Route path="/events/:id" element={<EventDetail />} />
                    <Route
                        exact
                        path="/registration-confirmed"
                        element={<RegistrationConfirmed />}
                    />
                    <Route
                        exact
                        path="/registration-deleted"
                        element={<RegistrationDeleted />}
                    />
                </Routes>
            </BrowserRouter>
        </div>
    );
}

export default App;
