import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
import AboutForm from "./Home/AboutForm";
import Hero from "./Home/Hero";
// import Navbar from "./Navbar";

function AboutUs() {
    return (
        <div className="main">
            {/* <Navbar /> */}

                <Hero
                path="/images/lesbotoc_photos/Team2.JPG"
                text="Meet the team."
                position="right 10% bottom 85%"
                />
            <div className="main-cont">
                <div className="description-cont">
                    <div className="description-text">
                        <h3>Who we are</h3>
                        <p className="descript">We are three average women. One from Prague, the second from Moravia and the third from Pilsen. We gathered from different corners of the Czech Republic to organize real meeting events. After years of searching, we discovered that lesbians have nowhere to go and nowhere to connect to each other.</p>
                    </div>
                <div className="description-img">
                    <img className="img-about" src="/images/pride/praha_pride_flag.jpg" />
                </div>
                </div>
            
                <div className="vision-cont">
                    <h3>Our vision</h3>
                    <p>We want to create space for regular meet-up events, organize a 2-3 day stay somewhere out of town - either a small campsite, which we would reserve just for us, or a larger cabin with sanitary facilities. We will prepare a program for the entire stay, which will include games to get to know each other, have fun competitions and room for creative enjoyment. We want to achieve this in a safe space, so that we all get to know each other and be inclusive to everyone.
                    </p>
                </div>

                <div className="reachout-cont">
                    <h3>How to reach out to us</h3>
                    <p>Email: lesbotoc@gmail.com</p>
                    <p>Phone number: +420 000 000</p>
                </div>

                <div className="socmed-cont">
                    <h3>CONTACT US</h3>
                    <h3>We love to hear from you.</h3>
                    
                </div>
                <div className="form-container"><AboutForm /></div>
            </div>
        </div>

    );
}

export default AboutUs;
