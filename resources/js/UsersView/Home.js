import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
// import Navbar from "./Navbar";

function Home() {
    return (
        <div className="main">
            {/* <Navbar /> */}
            <h1>This is the home component</h1>
        </div>
    );
}

export default Home;
