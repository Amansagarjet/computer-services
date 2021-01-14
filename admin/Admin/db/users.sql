
CREATE TABLE `users` (
  `login_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`login_id`, `name`, `email`, `passwd`, `status`) VALUES
(1, 'Niyaz', 'mr.niyazuddinkhan@gmail.com', '123456789', 'Y'),
(3, 'Vipin', 'mr.vipin@gmail.com', '987654321', 'Y');

ALTER TABLE `users`
  ADD PRIMARY KEY (`login_id`);

ALTER TABLE `users`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
