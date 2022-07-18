import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
// import Navbar from "./Navbar";

function AboutUs() {
    return (
        <div className="main">
            {/* <Navbar /> */}
            <h1>This is the AboutUs component</h1>


            <div className="hero-cont">
                <h1>Meet the team</h1>
                {/* <img src="/images/lesbotoc_photos/Team2.JPG" alt="rainbow flag in prague" /> */}
                {/* maybe make this img a bg? */}
            </div>
            <div className="description-cont">
                <h3>Who we are</h3>
                <p>We are three average women. One from Prague, the second from Moravia and the third from Pilsen. We gathered from different corners of the Czech Republic to organize a  real meeting event. After years of searching, we discovered that lesbians have nowhere to go and nowhere to find each other.</p>
                <img src="/images/pride/praha_pride_flag.jpg" alt="three organizers from lesbotoc" />
            </div>
            <div className="vision-cont">
                <h3>Our vision</h3>
                <p>We want to create space for regular meet-up events, organize a 2-3 day stay somewhere out of town - either a small campsite, which we would reserve just for us, or a larger cabin with sanitary facilities. We will prepare a program for the entire stay, which will include games to get to know each other, have fun competitions and room for creative enjoyment. We want to achieve this in a safe space, so that we all get to know each other and be inclusive to everyone.</p>
            </div>
            <div className="reachout-cont">
                <h3>How to reach out to us</h3>
                <p>Email: lesbotoc@gmail.com</p>
                <p>Phone number: +420 000 000</p>
            </div>
            <div className="socmed-cont"></div>
            <div className="form-cont"></div>
        </div>
    );
}

export default AboutUs;
