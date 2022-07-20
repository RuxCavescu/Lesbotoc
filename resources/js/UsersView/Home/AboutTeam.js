import React from "react";
import ReactDOM from "react-dom/client";
import TeamPicture from "./TeamPicture";

function AboutTeam() {
    return (
        <div className="main__about">
            <div className="main__about-org">
                <h2 className="about__intro-headline">We are Lesbotoc!</h2>
                <img className="about__intro-wave" src="assets/hello.svg"></img>
                <p className="about__intro-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
            <div className="main__about-teamImages">
                <TeamPicture
                    name="Eliska"
                    path="images/lesbotoc_photos/Eliška.jpg"
                />
                <TeamPicture
                    name="Mariana"
                    path="images/lesbotoc_photos/Mariana.jpg"
                />
                <TeamPicture
                    name="Marta"
                    path="images/lesbotoc_photos/Marta_cropped.jpg"
                />
            </div>
        </div>
    );
}

export default AboutTeam;
