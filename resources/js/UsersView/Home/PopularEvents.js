import React from "react";
import { useState, useEffect } from "react";
import ReactDOM from "react-dom/client";
import CarouselEvent from "./CarouselEvent";
import Calendar from "./Calendar";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";

function PopularEvents() {
    const responsive = {
        desktop: {
            breakpoint: { max: 3000, min: 1025 },
            items: 4,
            slidesToSlide: 3, // optional, default to 1.
        },
        tablet: {
            breakpoint: { max: 1024, min: 465 },
            items: 3,
            slidesToSlide: 2, // optional, default to 1.
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            slidesToSlide: 1, // optional, default to 1.
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
            <Carousel
                centerMode={true}
                swipeable={false}
                draggable={false}
                showDots={true}
                responsive={responsive}
                ssr={true} // means to render carousel on server-side.
                infinite={true}
                // autoPlay={this.props.deviceType !== "mobile" ? true : false}
                autoPlaySpeed={1000}
                keyBoardControl={true}
                customTransition="all .5"
                transitionDuration={500}
                containerClass="carousel-container"
                removeArrowOnDeviceType={["tablet", "mobile"]}
                // deviceType={this.props.deviceType}
                dotListClass="custom-dot-list-style"
                itemClass="carousel-item-padding-40-px"
            >
                {carouselEvents &&
                    carouselEvents.map((carouselEvent, index) => {
                        return (
                            <CarouselEvent
                                key={index}
                                date={carouselEvent.start_date}
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
