CREATE DATABASE IF NOT EXISTS eventease;
USE eventease;

CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    event_name VARCHAR(100) NOT NULL,
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional sample data:
-- INSERT INTO registrations (name, email, phone, event_name)
-- VALUES ('Demo User', 'demo@example.com', '9876543210', 'Tech Summit 2026');
