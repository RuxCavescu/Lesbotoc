import React from "react";
import ReactDOM from "react-dom/client";

function TeamPicture({ name, path }) {
    return (
        <div className="main__about-info">
            <div
                className="main__about-image"
                style={{
                    backgroundImage: `url('${path}')`,
                    backgroundSize: "cover",
                    backgroundPosition: "bottom",
                }}
            ></div>
            <h3>
                <strong>Name: {name} </strong>
            </h3>
            <p className="main__about-description">
                <strong>About me:</strong> Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
            </p>
        </div>
    );
}

export default TeamPicture;
