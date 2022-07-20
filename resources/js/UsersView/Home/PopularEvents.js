import React from "react";
import { useState, useEffect } from "react";
import ReactDOM from "react-dom/client";
import CarouselEvent from "./CarouselEvent";
import Calendar from "./Calendar";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import Moment from "moment";

function PopularEvents() {
    const responsive = {
        superLargeDesktop: {
            // the naming can be any, depends on you.
            breakpoint: { max: 4000, min: 3000 },
            items: 7,
        },

        extraLargeDesktop: {
            // the naming can be any, depends on you.
            breakpoint: { max: 3500, min: 3000 },
            items: 6,
        },

        LargeDesktop: {
            // the naming can be any, depends on you.
            breakpoint: { max: 3000, min: 2000 },
            items: 5,
        },
        desktop: {
            breakpoint: { max: 2000, min: 1024 },
            items: 4,
        },

        tablet2: {
            breakpoint: { max: 1024, min: 700 },
            items: 3,
        },

        tablet1: {
            breakpoint: { max: 700, min: 464 },
            items: 2,
        },

        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
        },
    };

    const [carouselEvents, setCarouselEvents] = useState(false);

    const loadEvents = async () => {
        const response = await fetch("/api/events");
        const responseData = await response.json();

        setCarouselEvents(responseData);
    };

    useEffect(() => {
        loadEvents();
    }, []);

    return (
        <div className="main__popular-events">
            <h2 className="popular__events-headline">Popular Events</h2>
            <p className="popular__events-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
            </p>
            <Carousel responsive={responsive} infinite={true}>
                {carouselEvents &&
                    carouselEvents.map((carouselEvent, index) => {
                        return (
                            <CarouselEvent
                                key={index}
                                // date={carouselEvent.start_date}
                                date={Moment(carouselEvent.start_date).format(
                                    "DD.MM.YYYY"
                                )}
                                title={carouselEvent.title_en}
                                path={carouselEvent.image.path}
                                eventId={carouselEvent.id}
                            />
                        );
                    })}
                {/* </div> */}
            </Carousel>
        </div>
    );
}

export default PopularEvents;
