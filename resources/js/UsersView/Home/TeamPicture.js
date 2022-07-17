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
            <h3>Name: {name}</h3>
        </div>
    );
}

export default TeamPicture;
