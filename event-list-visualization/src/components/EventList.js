import React from 'react';
import EventDetails from './EventDetails';
import styles from './EventList.module.scss';


const EventList = ({ events }) => {
 return (
    <div className={styles['event-list']}>
      {events.map((event, index) => (
        <EventDetails key={index} event={event} />
      ))}
    </div>
 );
};

export default EventList;
