# Logging

Logging in a simplified way to a file or DB.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This project provides a simplified logging mechanism that allows you to log messages to a file or a database. It is designed to be easy to integrate into your existing applications.

## Features

- Log messages to a file
- Log messages to a database
- Configurable logging levels (e.g., DEBUG, INFO, WARN, ERROR)
- Easy to set up and use

## Installation

To install the logging library, you can use pip:

```bash
pip install your-logging-library
# Logging
Logging in a simplified way to a file or DB


  "scripts": {
    "post-install-cmd": [
      "@php -r \"if (!is_dir(getcwd() . '/logs')) mkdir(getcwd() . '/logs', 0775, true);\""
    ],
    "post-update-cmd": [
      "@php -r \"if (!is_dir(getcwd() . '/logs')) mkdir(getcwd() . '/logs', 0775, true);\""
    ]
  },
  "scripts": {
    "post-install-cmd": [
      "@php -r \"if (!is_dir('../../logs')) mkdir('../../logs', 0775, true);\"",
      "@php -r \"if (!file_exists('../../database.ini')) file_put_contents('../../database.ini', '[database]\\nhost=localhost\\ndbname=mydb\\nuser=root\\npassword=');\""
    ]
  },

    "scripts": {
    "post-install-cmd": [
      "@php -r \"if (!is_dir(getcwd() . '/logs')) mkdir(getcwd() . '/logs', 0775, true);\""
    ],
    "post-update-cmd": [
      "@php -r \"if (!is_dir(getcwd() . '/logs')) mkdir(getcwd() . '/logs', 0775, true);\""
    ]
  },
