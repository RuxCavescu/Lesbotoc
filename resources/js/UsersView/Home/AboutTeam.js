import React from "react";
import ReactDOM from "react-dom/client";
import TeamPicture from "./TeamPicture";

function AboutTeam() {
    return (
        <div className="main__about">
            <div className="main__about-org">
                <div className="about__intro-container">
                    <img
                        className="about__intro-wave"
                        src="assets/hello.svg"
                    ></img>
                    <div className="about__intro-text">
                        <h1 className="about__intro-headline">
                            We are Lesbotoc!
                        </h1>
                        <p>
                            We are 3 women from different parts of the Czech
                            Republic. As there is not so many possibilities of
                            entertainment with other lesbians we decided to
                            organizing various events for lesbians on regular
                            basis by ourself.
                        </p>
                        <h3 className="about__intro-headline2">
                            Hope to see you in some of our events.
                        </h3>
                    </div>
                </div>
            </div>
            <div className="main__about-teamImages">
                <TeamPicture
                    name="EliŠka"
                    path="/images/lesbotoc_photos/team/Eliska.jpg"
                    about="Is coming from Prague. She studied toys production in School of Arts and Crafts. Her big passion is  playing music under name Eloun. Currently  living in Prague with Mariana."
                />
                <TeamPicture
                    name="Mariana"
                    path="/images/lesbotoc_photos/team/Mariana.jpg"
                    about="Is coming from Plzeň. She studied bioinformatics on VŠCHT. She is playing as a hockey forward in team Kobra. Currently living in Prague with Eliška."
                />
                <TeamPicture
                    name="Marta"
                    path="/images/lesbotoc_photos/team/Marta_cropped.jpg"
                    about="Is coming from Vsetín. She studied mechanical engineering on ČVUT. She loves to cook, listen to music and create tables in excel. Currently living in Prague with her two cats."
                />
            </div>
        </div>
    );
}

export default AboutTeam;
