// Всички филми
db.movies.find();

// Всички клиенти с над 100 точки
db.customers.find({ loyalty_points: { $gt: 100 } });

// Обновяване на зала
db.halls.updateOne({ name: "Зала 2" }, { $set: { type: "IMAX" } });

// Изтриване на резервация със стари дати
db.reservations.deleteMany({ reserved_on: { $lt: new Date("2024-01-01") } });

// Агрегиране: брой прожекции по език
db.screenings.aggregate([
  { $group: { _id: "$language", total: { $sum: 1 } } }
]);

// Среден рейтинг по жанр
db.movies.aggregate([
  { $group: { _id: "$genre", avg_rating: { $avg: "$rating" } } }
]);

// Общо резервирани места по прожекция
db.reservations.aggregate([
  { $unwind: "$seats" },
  { $group: { _id: "$screening_id", total_reserved_seats: { $sum: 1 } } }
]);
