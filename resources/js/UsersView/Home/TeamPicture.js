import React from "react";
import ReactDOM from "react-dom/client";

function TeamPicture({ name, path, about }) {
    return (
        <div className="main__about-info">
            <div
                className="main__about-image"
                style={{
                    backgroundImage: `url('${path}')`,
                    backgroundSize: "cover",
                    backgroundPosition: "bottom",
                    borderRadius: "10px",
                }}
            ></div>
            <h3 className="main__about-name">{name}</h3>
            <p className="main__about-description">{about}</p>
        </div>
    );
}

export default TeamPicture;
