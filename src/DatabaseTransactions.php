<?php

/**
 * DatabaseTransactions trait for handling database transactions in tests
 * 
 * This trait provides automatic database transaction handling for test cases.
 * When used, each test will run within a database transaction that is 
 * automatically rolled back after the test completes, ensuring test isolation.
 */
trait DatabaseTransactions 
{
    // Implementation handled by OpenCartTest base class
    // This trait serves as a marker to enable transaction handling
}