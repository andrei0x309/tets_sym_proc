## Example of New Process Component Symfony Feature

This repo contains an example using create_new_console if implemented in Symphony Process so you can easely detatch a process from your main script to simulate some kind of poor man concurency. 

Can be useful if your new process is another PHP script that takes a long time to execute like sending an email, doing some expensive IO, start a system job, and you don't want to implement this kind of feature using queues or Reactive PHP. 