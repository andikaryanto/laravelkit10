import React from 'react';

export const Modal = ({ isOpen, onClose }) => {
  return (
    <div
      className={`fixed inset-0 z-40 flex items-center justify-center bg-black bg-opacity-50 ${
        isOpen ? 'visible' : 'invisible'
      }`}
    >
      <div className="bg-white rounded-lg p-6">
        <h2 className="text-2xl font-bold mb-4">Modal Title</h2>
        <p className="mb-4">Modal content goes here.</p>
        <button
          className="bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-4 py-2"
          onClick={onClose}
        >
          Close
        </button>
      </div>
    </div>
  );
};