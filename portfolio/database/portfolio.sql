-- ================================================
--  Portfolio Database Schema
--  Muhammad Khaliz Hakam
--  File: database/portfolio.sql
-- ================================================

CREATE DATABASE IF NOT EXISTS `portfolio`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `portfolio`;

-- ── Projects Table ────────────────────────────────
CREATE TABLE IF NOT EXISTS `projects` (
  `id`          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title`       VARCHAR(120)    NOT NULL,
  `description` TEXT            NOT NULL,
  `tech_stack`  VARCHAR(255)    NOT NULL  COMMENT 'Comma-separated list e.g. PHP, MySQL, JS',
  `image`       VARCHAR(255)    DEFAULT NULL COMMENT 'Filename relative to assets/images/',
  `demo_url`    VARCHAR(500)    DEFAULT NULL,
  `github_url`  VARCHAR(500)    DEFAULT NULL,
  `is_featured` TINYINT(1)      NOT NULL DEFAULT 1,
  `sort_order`  SMALLINT        NOT NULL DEFAULT 0,
  `created_at`  TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`  TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX `idx_featured` (`is_featured`),
  INDEX `idx_sort`     (`sort_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ── Messages Table ────────────────────────────────
CREATE TABLE IF NOT EXISTS `messages` (
  `id`         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name`       VARCHAR(100)  NOT NULL,
  `email`      VARCHAR(255)  NOT NULL,
  `message`    TEXT          NOT NULL,
  `is_read`    TINYINT(1)    NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_read`       (`is_read`),
  INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ── Seed: Sample Projects ─────────────────────────
INSERT INTO `projects`
  (`title`, `description`, `tech_stack`, `image`, `demo_url`, `github_url`, `is_featured`, `sort_order`)
VALUES
  (
    'Developer Portfolio',
    'A modern, dark-mode developer portfolio built with pure PHP MVC architecture, Tailwind CSS, and MySQL. Features glassmorphism design, smooth scroll animations, and a contact form backend.',
    'PHP, MySQL, Tailwind CSS, JavaScript',
    NULL,
    NULL,
    'https://github.com/',
    1,
    1
  ),
  (
    'Sunday Market Management',
    'Community event management system for Karang Taruna RW 01. Handles event scheduling, fund collection tracking, and member management for neighborhood markets.',
    'PHP, MySQL, Bootstrap, CSS',
    NULL,
    NULL,
    'https://github.com/',
    1,
    2
  ),
  (
    'Accounting Dashboard',
    'Simple yet powerful accounting tracker for small businesses. Integrates with Microsoft Excel exports and features income/expense categorization with monthly reports.',
    'PHP, MySQL, JavaScript, Excel API',
    NULL,
    NULL,
    'https://github.com/',
    1,
    3
  );
