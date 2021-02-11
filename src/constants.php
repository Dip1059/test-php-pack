<?php

//env types
const COLLPAY_ENV_SANDBOX = 2;
const COLLPAY_ENV_PRODUCTION = 1;

//api versions
const COLLPAY_V1 = 'v1';

//payment transaction statuses
const COLLPAY_TRANSACTION_PROCESSING = 'Processing';
const COLLPAY_TRANSACTION_NOTIFIED = 'Notified';
const COLLPAY_TRANSACTION_EXPIRED = 'Expired';
const COLLPAY_TRANSACTION_CONFIRMED = 'Confirmed';
/*const COLLPAY_TRANSACTION_COMPLETED = 'Completed';
const COLLPAY_TRANSACTION_FAILED = 'Failed';
const COLLPAY_TRANSACTION_REJECTED = 'Rejected';
const COLLPAY_TRANSACTION_BLOCKED = 'Blocked';
const COLLPAY_TRANSACTION_REFUNDED = 'Refunded';
const COLLPAY_TRANSACTION_VOIDED = 'Voided'*/

//ipn or webhook events
const COLLPAY_PAYMENT_EVENT = 'payment';
