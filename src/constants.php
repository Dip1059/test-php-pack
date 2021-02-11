<?php

//env types
const ENV_SANDBOX = 2;
const ENV_PRODUCTION = 1;

//api versions
const V1 = 'v1';

//payment transaction statuses
const TRANSACTION_PROCESSING = 'Processing';
const TRANSACTION_NOTIFIED = 'Notified';
const TRANSACTION_EXPIRED = 'Expired';
const TRANSACTION_CONFIRMED = 'Confirmed';
/*const TRANSACTION_COMPLETED = 'Completed';
const TRANSACTION_FAILED = 'Failed';
const TRANSACTION_REJECTED = 'Rejected';
const TRANSACTION_BLOCKED = 'Blocked';
const TRANSACTION_REFUNDED = 'Refunded';
const TRANSACTION_VOIDED = 'Voided'*/

//ipn or webhook events
const PAYMENT_EVENT = 'payment';
