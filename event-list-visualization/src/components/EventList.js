import React from 'react';
import EventDetails from './EventDetails';

const EventList = ({ events }) => {
 return (
    <div className="event-list">
      {events.map((event, index) => (
        <EventDetails key={index} event={event} />
      ))}
    </div>
 );
};

export default EventList;
