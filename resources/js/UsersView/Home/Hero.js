import React from "react";
import ReactDOM from "react-dom/client";

function Hero({ path }) {
    return (
        <div className="main__hero">
            <div
                className="main__hero-imageContainer"
                style={{
                    backgroundImage: `url('${path}')`,
                    backgroundSize: "cover",
                    backgroundPosition: "bottom",
                }}
            >
                <h1 className="main__hero-title">
                    Connect. Share. Make friends.
                </h1>
            </div>
        </div>
    );
}

export default Hero;
