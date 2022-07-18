function CarouselEvent({ path, title, date, eventId }) {
    return (
        <div
            className="carousel__event"
            style={{
                background: `linear-gradient(to right, rgba(0, 0, 0, 0.424), rgba(0, 0, 0, 0.424)), url(${path})`,
                backgroundSize: "cover",
                backgroundPosition: "center",
            }}
        >
            <p className="carousel__event-date">{date}</p>
            <p className="carousel__event-name">{title}</p>

            <a className="carousel__event-link" href={"/events/" + eventId}>
                <button className="carousel__event-button">Read more</button>
            </a>
        </div>
    );
}

export default CarouselEvent;
