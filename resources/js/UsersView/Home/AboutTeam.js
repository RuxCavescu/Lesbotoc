import React from "react";
import ReactDOM from "react-dom/client";
import TeamPicture from "./TeamPicture";

function AboutTeam() {
    return (
        <div className="main__about">
            <h2 className="about__intro-headline">We are Lesbotoc!</h2>
            <p className="about__intro-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div className="main__about-teamImages">
                <TeamPicture
                    name="Marta 1"
                    path="images/pride/pride_parade.jpg"
                />
                <TeamPicture
                    name="Marta 2"
                    path="images/pride/pride_parade.jpg"
                />
                <TeamPicture
                    name="Marta 3"
                    path="images/pride/pride_parade.jpg"
                />
            </div>
        </div>
    );
}

export default AboutTeam;
