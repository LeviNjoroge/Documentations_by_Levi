# PHP Documentation by Levi

<p align="center">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
    <img src="https://img.shields.io/badge/Documentation-FF6B6B?style=for-the-badge&logo=gitbook&logoColor=white" alt="Documentation">
    <img src="https://img.shields.io/badge/Open%20Source-4CAF50?style=for-the-badge&logo=github&logoColor=white" alt="Open Source">
</p>

## 📖 About This Documentation

This is a comprehensive PHP documentation project based on practical understanding and hands-on experience with the PHP programming language. The documentation is regularly updated with new concepts, examples, and best practices.

**🤝 Open for Collaboration** - Contributions, suggestions, and improvements are welcome!

## 🎯 What is PHP?

PHP (PHP: Hypertext Preprocessor) is an open-source server-side scripting language designed for web development. PHP scripts are executed on the server, and the results are returned to the browser as HTML.

### Prerequisites
Before diving into PHP, you should have a basic understanding of:
- **HTML** - Structure and markup
- **CSS** - Styling and layout  
- **JavaScript** - Client-side scripting

> 💡 **Note**: A PHP file can contain HTML, CSS, JavaScript, and PHP code. PHP files must have a `.php` extension.

## 🚀 What PHP Can Do

PHP is a versatile language capable of:

- ✅ **Generate dynamic page content**
- ✅ **File operations** - Create, open, read, write, delete files on the server
- ✅ **Form data collection** - Handle user input securely
- ✅ **Cookie management** - Send and receive cookies
- ✅ **Database operations** - Add, delete, modify data
- ✅ **User access control** - Authentication and authorization
- ✅ **Data encryption** - Secure sensitive information
- ✅ **Media generation** - Output images, PDF files, and more

## 🌟 Why Choose PHP?

| Feature | Benefit |
|---------|---------|
| **Cross-platform** | Runs on Windows, Linux, Unix, macOS |
| **Server compatibility** | Works with Apache, Nginx, IIS, and more |
| **Database support** | MySQL, PostgreSQL, MongoDB, Oracle, etc. |
| **Cost-effective** | Completely free and open-source |
| **Learning curve** | Easy to learn and get started |
| **Performance** | Efficient execution and resource usage |

## 📚 Documentation Contents

### Core Concepts

#### 1. [PHP Basics](./1_basics.php)
- **Comments and Documentation**
    - Single-line comments (`//`)
    - Multi-line comments (`/* */`)
    - Best practices for code documentation
- **Output Methods**
    - `echo` statement (faster, no return value)
    - `print` statement (returns 1)
    - Performance differences and use cases

#### 2. [Variables and Data Types](./2_variables_n_datatypes.php)
- **Variable Declaration and Rules**
    - Variable naming conventions
    - Case sensitivity guidelines
    - Scope management (global vs local)
- **Data Types Coverage**
    - `String` - Text data with quotes
    - `Integer` - Whole numbers
    - `Float/Double` - Decimal numbers
    - `Boolean` - True/false values
    - `Array` - Multiple values in one variable
    - `NULL` - Empty or undefined values
    - `Object` - Custom data structures
    - `Resource` - External resources
- **Advanced Concepts**
    - Type checking with `var_dump()`
    - Multiple variable assignment
    - Variable scope (global, local, static)

#### 3. [Form Handling - GET and POST](./4_get_n_post.php)
- **HTTP Methods**
    - `$_GET` superglobal - URL parameter handling
    - `$_POST` superglobal - Secure form data transmission
- **Security Considerations**
    - Data visibility differences
    - When to use GET vs POST
- **Practical Examples**
    - Contact forms
    - User registration
    - Data validation techniques

#### 4. [Mathematical Operations](./5_math.php)
- **Built-in Math Functions**
    - Basic arithmetic operations
    - Advanced mathematical calculations
    - User input processing for calculations
- **Practical Applications**
    - Calculator implementations
    - Mathematical problem solving

#### 5. [Math Exercise - Circle Calculations](./5_math_excercise.php)
- **Geometric Calculations**
    - Circle area calculation
    - Circumference computation
    - Sphere volume calculations
- **User Input Integration**
    - Radius input handling
    - Dynamic calculation results

#### 6. [Switch Case Statements](./7_switches.php)
- **Control Flow with Switch**
    - Switch statement syntax
    - Case handling and break statements
    - Default case implementation
- **Practical Examples**
    - Grade evaluation system
    - Menu selection handling
    - Conditional logic alternatives

#### 7. [Arrays - Indexed and Associative](./11_arrays.php)
- **Array Types**
    - Indexed arrays with numeric keys
    - Associative arrays with string keys
    - Multidimensional arrays
- **Array Operations**
    - Creating and initializing arrays
    - Accessing array elements
    - Array manipulation techniques
- **Advanced Array Concepts**
    - Key-value pair associations
    - Nested array structures
    - Tabular data representation

#### 8. [Arrays Exercise - Country Capitals](./11_arrays_exercise.php)
- **Associative Array Implementation**
    - Country-capital mapping
    - Dynamic data retrieval
    - User input processing with arrays
- **Form Integration**
    - GET method with array lookup
    - Error handling for missing keys
    - Efficient data access patterns

#### 9. [Radio Buttons](./13.radio.php)
- **Single Selection Forms**
    - Radio button implementation
    - Form data processing
    - User choice handling
- **Payment Method Selection**
    - Multiple option presentation
    - POST method integration
    - Selected value retrieval

#### 10. [Checkboxes](./14.checkboxes.php)
- **Multiple Selection Forms**
    - Checkbox array handling
    - Multiple value processing
    - Dynamic option selection
- **Food Selection System**
    - Array-based checkbox values
    - Bulk data processing
    - User preference handling

#### 11. [String Functions](./16_string_functions.php)
- **String Manipulation Methods**
    - `strtoupper()` - Convert to uppercase
    - `strtolower()` - Convert to lowercase
    - `ucwords()` - Capitalize first letters
    - `strlen()` - String length calculation
    - `strrev()` - String reversal
    - `str_word_count()` - Word counting
    - `strpos()` - Character position finding
    - `trim()` - Whitespace removal
    - `str_replace()` - String replacement
    - `substr()` - String extraction
- **Practical String Processing**
    - Text formatting and cleaning
    - Search and replace operations
    - String analysis and manipulation

#### 12. [Input Sanitization and Validation](./17_sanitize_n_validate_input.php)
- **Data Security**
    - Input sanitization techniques
    - Data validation methods
    - SQL injection prevention
- **Filter Functions**
    - `filter_input()` method usage
    - FILTER_SANITIZE options
    - FILTER_VALIDATE options
- **Form Security**
    - Email validation
    - Username sanitization
    - Age validation
    - Clean data processing

#### 13. [Session Management](./20_session.php)
- **Session Fundamentals**
    - `session_start()` - Session initialization
    - `$_SESSION[]` - Session data storage
    - `session_destroy()` - Session termination
- **User Authentication**
    - Login system implementation
    - Session persistence across pages
    - User data management
- **Practical Session Demo**
    - [Login Page](./20_session_demo/login.php)
    - [Home Page](./20_session_demo/index.php)
    - User state management
    - Logout functionality

#### 14. [Server Superglobal](./21_server.php)
- **$_SERVER Variable**
    - Server environment information
    - HTTP headers and paths
    - Script location details
- **Server Data Access**
    - Request method detection
    - Current file identification
    - Environment variable retrieval
- **Web Server Integration**
    - Server-specific information
    - Request handling data
    - System environment details

### Advanced Topics

#### Security Best Practices
- Input validation and sanitization
- SQL injection prevention
- Cross-site scripting (XSS) protection
- Session security management

#### Form Processing
- GET vs POST method selection
- File upload handling
- Form validation techniques
- Error handling and user feedback

#### Data Management
- Array manipulation and processing
- String operations and formatting
- Session data persistence
- Server environment utilization

## 🛠️ Getting Started

### Installation Requirements

1. **Web Server** (Choose one):
     - [XAMPP](https://www.apachefriends.org/) - Cross-platform solution
     - [WAMP](https://www.wampserver.com/) - Windows-specific
     - [MAMP](https://www.mamp.info/) - macOS-specific
     - [LAMP](https://www.linux.com/training-tutorials/easy-lamp-server-installation/) - Linux-specific

2. **Code Editor** (Recommended):
     - [Visual Studio Code](https://code.visualstudio.com/) with PHP extensions
     - [PhpStorm](https://www.jetbrains.com/phpstorm/) - Professional IDE
     - [Sublime Text](https://www.sublimetext.com/) with PHP packages

### Quick Setup

```bash
# Clone this repository
git clone https://github.com/LeviNjoroge/Documentations_by_Levi.git

# Navigate to project directory
cd Documentations_by_Levi

# Start your local server (if using built-in PHP server)
php -S localhost:8000
```

## 📖 Learning Path

### Beginner Level
1. Start with [PHP Basics](./1_basics.php)
2. Learn [Variables and Data Types](./2_variables_n_datatypes.php)
3. Practice with [Form Handling](./4_get_n_post.php)

### Intermediate Level
- Control structures (if/else, loops)
- Functions and includes
- Working with databases
- Session management

### Advanced Level
- Object-oriented programming
- Error handling
- Security best practices
- Performance optimization

## 🔗 Useful Resources

### Official Documentation
- [PHP Official Manual](https://www.php.net/manual/en/) - Complete PHP reference
- [PHP.net](https://www.php.net/) - Official PHP website

### Learning Platforms
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/) - Beginner-friendly tutorials
- [PHP The Right Way](https://phptherightway.com/) - Best practices guide
- [Codecademy PHP Course](https://www.codecademy.com/learn/learn-php) - Interactive learning
- [freeCodeCamp](https://www.freecodecamp.org/) - Free coding bootcamp

### Development Tools
- [Composer](https://getcomposer.org/) - Dependency manager for PHP
- [PHPUnit](https://phpunit.de/) - Testing framework
- [Xdebug](https://xdebug.org/) - Debugging and profiling tool

### Community and Support
- [Stack Overflow - PHP](https://stackoverflow.com/questions/tagged/php) - Q&A community
- [Reddit r/PHP](https://www.reddit.com/r/PHP/) - PHP community discussions
- [PHP Weekly](https://www.phpweekly.com/) - Newsletter with latest PHP news

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/amazing-feature`)
3. **Commit** your changes (`git commit -m 'Add some amazing feature'`)
4. **Push** to the branch (`git push origin feature/amazing-feature`)
5. **Open** a Pull Request

### Contribution Guidelines
- Follow PSR coding standards
- Add comments and documentation
- Include practical examples
- Test your code before submitting

## 📝 Important Notes

> **PHP Syntax**: PHP code can be embedded anywhere in an HTML document using the tags `<?php` and `?>`

> **Case Sensitivity**: Variable names are case-sensitive (`$age` and `$AGE` are different), but keywords and function names are not.

> **File Extensions**: All PHP files must end with the `.php` extension to be processed by the server.

## 📞 Contact & Support

- **Author**: Levi Njoroge
- **Repository**: [Documentations_by_Levi](https://github.com/LeviNjoroge/Documentations_by_Levi)
- **Issues**: [Report bugs or request features](https://github.com/LeviNjoroge/Documentations_by_Levi/issues)

---

<p align="center">
    <strong>⭐ If you find this documentation helpful, please consider giving it a star!</strong>
</p>

<p align="center">
    Made with ❤️ by <a href="https://github.com/LeviNjoroge">Levi Njoroge</a>
</p>