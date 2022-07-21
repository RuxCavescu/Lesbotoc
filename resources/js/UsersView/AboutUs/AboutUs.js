import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import { Link } from "react-router-dom";
import AboutForm from "./AboutForm";
import Hero from "../Home/Hero";
// import Navbar from "./Navbar";

function AboutUs() {
    return (
        <div className="main">
           
            {/* <Navbar /> */}

                <Hero
                path="/images/lesbotoc_photos/Team2.JPG"
                text="Meet the <br>team."
                position="right 10% bottom 85%"
                />
            <div className="main__container">

                {/* <div className="icons__cont">    </div> */}

                <div className="text__cont">

                    <div className="description__cont">
                        <div className="icon__cont-single">
                            <img className="icons__cont-icon1" src="/images/lgbt-community.jpg" alt="clipart rainbow family" /></div>
                        <h3 className="description__cont-title">Who we are</h3>
                        <p className="description__cont-text">We are three average women. One from Prague, the second from Moravia and the third from Pilsen. We gathered from different corners of the Czech Republic to organize real meeting events. After years of searching, we discovered that lesbians have nowhere to go and nowhere to connect to each other.</p>
                    </div>
                    
                    <div className="vision__cont">
                        <div className="icon__cont-single">
                            <img className="icons__cont-icon2" src="/images/lgbt-check.jpeg" alt="clipart rainbow check" /></div>
                        <h3 className="vision__cont-title">Our vision</h3>
                        <p className="vision__cont-text">We want to create space for regular meet-up events, organize a 2-3 day stay somewhere out of town - either a small campsite, which we would reserve just for us, or a larger cabin with sanitary facilities. We will prepare a program for the entire stay, which will include games to get to know each other, have fun competitions and room for creative enjoyment. We want to achieve this in a safe space, so that we all get to know each other and be inclusive to everyone.</p>
                    </div>

                    <div className="reachout__cont">
                        <div className="icon__cont-single">
                            <img className="icons__cont-icon3" src="/images/lgbt-heart.png" alt="clipart rainbow heart" /></div>
                        <h3 className="reachout__cont-title">How to reach out to us</h3>
                        <br />
                        <div className="reachout__cont-both" >
                            <img className="reachout__cont-icon" src="images/email.png" alt="email icon" />
                            <p className="reachout__cont-text">lesbotoc@gmail.com</p>
                        </div>
                        <div className="reachout__cont-both" >
                            <img className="reachout__cont-icon" src="images/phone.png" alt="phone icon" />
                            <p className="reachout__cont-text">+420 000 000</p>
                        </div>
                        <div className="reachout__cont-both" >
                            <img className="reachout__cont-icon" src="images/facebook1.png" alt="facebook icon" />
                            <p className="reachout__cont-text">facebook.com/seznamsenatoci</p>
                        </div>
                        <div className="reachout__cont-both" >
                            <img className="reachout__cont-icon" src="images/instagram1.png" alt="instagram icon" />
                            <p className="reachout__cont-text">instagram.com/lesbotoc/</p>
                        </div>
                    </div>
                </div>

            </div>  
            
            <div className="contact-us">

                    <h3 className="contact__h3">CONTACT US</h3>
                    <h3 className="contact__h3">We love to hear from you.</h3>
            </div>
            
            <div className="about-form-container"><AboutForm /></div>


    </div>
           
    );
}

export default AboutUs;
