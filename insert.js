db = connect("mongodb://localhost:27017/cinema");
// Добавяне на филми
db.movies.insertMany([
  {
    title: "Inception",
    genre: "Sci-Fi",
    duration_min: 148,
    rating: 8.8,
    cast: ["Leonardo DiCaprio", "Joseph Gordon-Levitt"]
  },
]);

// Добавяне на зали
db.halls.insertMany([
  { name: "Зала 1", capacity: 150, type: "3D" },
  { name: "Зала 2", capacity: 100, type: "2D" }
]);

// Добавяне на клиенти
db.customers.insertMany([
  { name: "Анна Петрова", email: "anna@mail.com", phone: "0888123456", loyalty_points: 120 }
]);

// Добавяне на прожекции
db.screenings.insertMany([
  {
    movie_id: ObjectId("..."),
    hall_id: ObjectId("..."),
    date_time: ISODate("2025-06-21T20:00:00Z"),
    language: "Bulgarian",
    subtitled: false
  },
]);

// Добавяне на резервации
db.reservations.insertOne({
  customer_id: ObjectId("..."),
  screening_id: ObjectId("..."),
  seats: ["A1", "A2"],
  reserved_on: new Date()
});
