# 🏨 Hotel Management System

A complete hotel management solution designed for academic projects and medium-scale real-world hotel operations.
The system manages room reservations, customers, employees, services, billing, and complete hotel workflows with a production-like structure.

---

## 📌 Project Overview

This project simulates the operations of a modern hotel, providing realistic end-to-end functionality:

* **Room booking & availability checking**
* **Customer management**
* **Check-in / Check-out workflow**
* **Service ordering** (Food, Spa, Laundry, Transportation, etc.)
* **Employee management**
* **Multi-room reservations**
* **Financial reporting**
* **Manager dashboard with analytics**

The design follows proper **database normalization**, **business rules**, and **multi-table relationships**.

---

## 🧱 Database Structure (8 Core Tables)

### 1. **Customers**

Stores all customer details:

* Name, Email, Phone, Address
* Date of birth
* Loyalty points
* Registration date

### 2. **RoomTypes**

Defines the available room categories:

* Standard, Deluxe, Suite, Family, Presidential
* Capacity
* Base price per night
* Description & amenities

### 3. **Rooms**

Represents each physical hotel room:

* Room number, floor, smoking status
* **Type** *(FK → RoomTypes)*
* Status: Available, Occupied, Maintenance, Cleaning

### 4. **Reservations**

Stores reservation details:

* Customer
* Check-in & check-out dates
* Adults / children
* Total amount
* Status: Confirmed, CheckedIn, CheckedOut, Cancelled, NoShow
* Special requests
* Created by employee

### 5. **ReservationRooms** *(Junction Table)*

Allows one reservation to contain multiple rooms.

* Saves **price per night** for each room
* Supports group/family bookings

### 6. **Employees**

Employee profile information:

* Name, position, email, phone
* Hire date
* Active status

### 7. **Services**

Defines hotel services:

* Food, Spa, Laundry, Transportation
* Name, category, price

### 8. **ReservationServices**

Stores service orders for guests:

* Reservation ID
* Service ID
* Quantity, time, total price
* Served by employee

---

## 🧠 Key System Complexities

The system includes realistic hotel logic, including:

* Checking **room availability** using non-overlapping date queries
* Calculating:

  * Occupancy rate
  * Monthly revenue
  * Most-occupied room types
* Generating housekeeping schedules
* Multi-step workflows:

  * Cancel reservation → update availability + remove services
  * Check-out → calculate bill + update room status + add loyalty points

---

## 🧾 Example SQL Queries

Common analytical queries include:

* Find available rooms (NOT EXISTS)
* Occupancy percentage by room type
* Customer history with total spending
* Monthly revenue (rooms + services)
* Top 10 loyal customers
* Rooms occupied more than 200 nights / year
* Employee activity report

---

## 🖥️ Application Features (WinForms / WPF)

* Dashboard with color-coded room status
* Room search with photos
* Customer registration
* Reservation creation workflow
* Check-in / Check-out wizard
* Add services during stay with live billing updates
* Employee views for daily operations
* Manager analytics dashboard with charts

---

## 📊 Sample Dataset Recommendation

To make the demo realistic:

* **80–100 rooms**
* **300–400 customers**
* **500+ reservations**
* **800+ service orders**

---

## 🚀 Optional Enhancements

* Add a `Photos` table (room images using varbinary)
* Employee hierarchy (manager → employees)
* Trigger to auto-update loyalty points on checkout
* Stored Procedure: `FindBestAvailableRoom` for room upgrades

---

## 📁 Ideal Project Structure (GitHub)

```
HotelManagementSystem/
│
├── Database/
│   ├── schema.sql
│   ├── seed_data.sql
│
├── App/
│   ├── Forms/
│   ├── Models/
│   ├── Services/
│   ├── Repositories/
│   ├── Utils/
│   └── App.csproj
│
├── README.md
└── LICENSE
```

---

If you want, I can also:

* Add **badges** (build status, stars, etc.)
* Add **screenshots section**
* Create **SQL diagrams**
* Generate **sample seed data**
* Write a **professional GitHub README.md** with advanced formatting
