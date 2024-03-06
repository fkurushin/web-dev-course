import React from 'react';
import EventList from './components/EventList';

const App = () => {
 const events = [
    { title: 'Событие 1', description: 'Описание события 1', date: '24.02.2023' },
    { title: 'Событие 2', description: 'Описание события 2', date: '25.02.2023' },
    // Добавьте больше событий по аналогии
 ];

 return (
    <div className="App">
      <EventList events={events} />
    </div>
 );
};

export default App;
