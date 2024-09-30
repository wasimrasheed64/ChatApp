# Laravel Chat Application

This project is a chat application built using **Laravel Reverb** and **Livewire**. It enables users to engage in **one-to-one chats** that initially start as automated conversations. An admin can later join and participate in the chat from the admin panel, providing real-time interaction and support.

## Installation Instructions

### Step 1: Clone the Repository
```bash
git clone <repository-url>
cd <project-folder>
```
 
### Step 2: Install Composer Dependencies
```bash
composer install
```

### Step 3: Update ENV 
```bash
cp .env.example .env

REVERB_KEY=<your-reverb-key>
REVERB_SECRET=<your-reverb-secret>
REVERB_URL=<your-reverb-url>

DATABASE_CONNECTION=Sync
```
### Step 4: Install Node Dependencies 
```bash
node version 22
npm install 
```

### Step 5: Start Project
```bash
php artisan serve 
php artisan reverb:install 
php artisan reverb:start
npm run dev 
```
### Features
* One-to-one chat: Users can engage in individual conversations.
* Automated chat: Conversations start with an automated message.
* Admin involvement: Admin can join chats in real-time via the admin panel.


### License
This project is open-source and available under the MIT License.
