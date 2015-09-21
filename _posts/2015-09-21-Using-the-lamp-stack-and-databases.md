---
layout: post
title:  "Using the lamp stack and intro to databases"
date:   2015-09-21 18:12:22
categories: lamp stack
author: Charlie Coggans
permalink: using-the-lamp-stack-and-intro-to-databases
---
Here is what we have done today, I am writing this down as a method of revision in an attempt to commit this from short term to long term memory. There are likely many ways to do the following stuff, but this is how I learnt it today.

The goal of today was to set up a virtual machine, build a database in MySQL on the VM (virtual machine) and connect a local PHP script to it to make changes to it. Here’s the steps:

Open terminal and use an SSH connection to connect to the virtual machine (we used Vagrant for the virtual machine)

Use the mysql command on the terminal to open MySQL on the VM

Create a simple database using basic MySQL commands - create database [database name], use [database name], CREATE TABLE [TABLE NAME] ([column name, type, PRIMARY KEY, auto_increment, CREATE TABLE people (id INT(8) PRIMARY KEY auto_increment, firstname VARCHAR(50), lastname(50), dob DATE); (this last long one sets the parameters for the table), INSERT INTO [table] ([fields]) VALUES ([values])
  exit the virtual machine and open sequel pro to connect back to the VM and view the database in a GUI

Use an IDE (in this case Atom) to create a documents.php file in inside the shared html file (sat inside the vagrant directory on the local machine - this constantly syncs to keep a record on both local and virtual machines
 open PHP tags and use mysqli to connect to the database - new mysqli($servername, $username, $password, $database); [all these are predetermined variables]

use MySQL code within PHP document to make changes eg: “SELECT * FROM people WHERE firstname IS NOT NULL;”

This allowed me to make changes to a MySQL database hosted on a VM ip address using a local PHP script.
