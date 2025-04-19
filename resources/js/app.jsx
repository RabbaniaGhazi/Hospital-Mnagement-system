import React from 'react';
import '../css/globals.css'; // Ensure the path is correct based on your directory structure

const MyComponent = ({ children }) => {
  return (
      <html lang="en">
          <body>{children}</body>
      </html>
  );
};

export default MyComponent;