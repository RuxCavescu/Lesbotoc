import React from "react";
import ReactDOM from "react-dom/client";

function Hero({ path, text, startDate, place, address, price, position }) {
    return (
        <div className="main__hero">
            <div
                className="main__hero-imageContainer"
                style={{
                    backgroundImage: `url('${path}')`,
                    backgroundSize: "cover",
                    // backgroundPosition: "bottom",
                    backgroundPosition: `${position}`,
                }}
            >
                <div className="main__hero-overlay">
                    <h1
                        className="main__hero-title"
                        dangerouslySetInnerHTML={{ __html: text }}
                    ></h1>
                    <div className="main__hero-details">
                        {startDate && (
                            <>
                                <span className="main__hero-detail">
                                    <i className="fa-solid fa-calendar-days"></i>
                                    {startDate}
                                </span>
                            </>
                        )}
                        {place && (
                            <>
                                <span className="main__hero-detail">
                                    <i className="fa-solid fa-location-dot"></i>
                                    {place}, {address}
                                </span>
                            </>
                        )}
                        {price && (
                            <>
                                {" "}
                                {console.log(price)}
                                <span className="main__hero-detail">
                                    <i className="fa-solid fa-dollar-sign"></i>
                                    {price == null ? "Free" : price}
                                </span>
                            </>
                        )}
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Hero;
