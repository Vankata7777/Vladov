# Cinema Management MongoDB Project 🎬

## 🎥 Описание

Тази MongoDB база данни симулира система за управление на кино. Поддържа информация за филми, зали, клиенти, резервации и прожекции. Реализирани са CRUD операции и агрегации.

## 🗃️ Колекции

1. **movies**
   - `title`: string
   - `genre`: string
   - `duration_min`: number
   - `rating`: number
   - `cast`: array

2. **halls**
   - `name`: string
   - `capacity`: number
   - `type`: string (e.g., 2D, 3D, IMAX)

3. **screenings**
   - `movie_id`: ObjectId
   - `hall_id`: ObjectId
   - `date_time`: date
   - `language`: string
   - `subtitled`: boolean

4. **customers**
   - `name`: string
   - `email`: string
   - `phone`: string
   - `loyalty_points`: number

5. **reservations**
   - `customer_id`: ObjectId
   - `screening_id`: ObjectId
   - `seats`: array of strings
   - `reserved_on`: date

## ▶️ Инсталация

1. Уверете се, че MongoDB е инсталирана.
2. Изпълнете:
   ```bash
   mongo < insert.js
   mongo < queries.js
