🏨 Hotel Management System

A complete hotel management solution designed for academic and mid-size real-world use.
The system manages room reservations, customers, employees, services, billing, and hotel operations with realistic workflows.

📌 Project Overview

This project simulates the operations of a boutique hotel chain, providing:

Room booking & availability checking

Customer management

Check-in / Check-out workflow

Service ordering (Food, Spa, Laundry, etc.)

Employee management

Multi-room reservations

Financial reports

Manager dashboard with analytics

The design follows proper database normalization, realistic business rules, and multi-table interactions.

🧱 Database Structure (8 Core Tables)
1. Customers

Stores customer information including name, email, phone, address, date of birth, loyalty points, and registration date.

2. RoomTypes

Defines each room category:

Standard, Deluxe, Suite, Family, Presidential

Capacity, base price per night

Description and amenities

3. Rooms

Represents each physical room:

Room number, floor, smoking status

Type (FK → RoomTypes)

Status: Available, Occupied, Maintenance, Cleaning

4. Reservations

Contains complete reservation data:

Customer, dates, adults/children

Total amount

Reservation status (Confirmed, CheckedIn, CheckedOut, Cancelled, NoShow)

Special requests

Created by employee

5. ReservationRooms (Junction Table)

Allows one reservation to include multiple rooms (M:N relationship).
Stores price paid per night for each room.

6. Employees

Employee details: name, position, email, phone, hire date, and active status.

7. Services

Any service offered by the hotel:

Food, Spa, Laundry, Transportation

Service name, category, price

8. ReservationServices

Stores service orders made by guests during their stay:

Reservation ID

Service ID

Quantity, time, total price

Served by employee

🧠 Key System Complexities

Checking room availability using advanced non-overlapping date queries

Calculating:

Occupancy rate

Monthly revenue

Most-occupied room types

Generating housekeeping schedules

Multi-table cascading operations:

Cancel reservation → updates multiple tables

Check-out → calculate final bill, update room status & loyalty points

🧾 Example SQL Queries

Find available rooms in date range (non-equijoin, NOT EXISTS)

Occupancy percentage by room type

Customer history with total spending

Monthly revenue from rooms + services

Top 10 loyal customers

Rooms occupied 200+ nights per year

Employee activity report

🖥️ Application Features (WinForms / WPF)

Dashboard with color-coded room occupancy

Room search with photo display

Customer registration

Reservation creation flow

Check-in / Check-out wizards

Add extra services during stay (live bill updates)

Employee view for organizing daily operations

Manager analytics with charts

📊 Sample Dataset Recommendation

To make the demo feel real:

80–100 rooms

300–400 customers

500+ reservations

800+ service orders

🚀 Optional Enhancements

Add a Photos table (varbinary)

Employee hierarchy (manager/subordinates)

Trigger to auto-update loyalty points on check-out

Stored Procedure: FindBestAvailableRoom for room upgrades