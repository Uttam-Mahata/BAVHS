import os
import shutil

def create_and_organize_files(root_directory):
    # Mapping of file names to destination folders
    file_mapping = {
        'style.css': 'css',
        'main.js': 'js',
        'new-gif.gif': 'images',
        'config.php': 'includes',
        'connection.php': 'includes',
        'action.php': 'includes',
        'attachment_config.php': 'includes',
        'index.php': 'pages',
        'adminlogin.php': 'pages',
        'admin_bavhs_cm_sys.php': 'pages',
        'notices.php': 'pages',
        'download.php': 'pages',
        'logout.php': 'pages',
        'validate.php': 'pages',
        'header.php': 'templates',
        'footer.php': 'templates',
        'README.md': '',
        'LICENSE': '',
        'Website.zip': ''
    }

    # Create subdirectories based on the mapping
    for destination_folder in set(file_mapping.values()):
        if destination_folder:
            folder_path = os.path.join(root_directory, destination_folder)
            os.makedirs(folder_path, exist_ok=True)

    # Iterate over files and move them to the respective folders
    for filename, destination_folder in file_mapping.items():
        source_path = os.path.join(root_directory, filename)
        destination_path = os.path.join(root_directory, destination_folder, filename) if destination_folder else os.path.join(root_directory, filename)

        # Check if the source file exists before moving
        if os.path.exists(source_path):
            shutil.move(source_path, destination_path)

if __name__ == "__main__":
    # Specify the current directory as the root directory
    current_directory = os.getcwd()

    # Call the function to create directories and organize files
    create_and_organize_files(current_directory)

    print("Files organized into the specified directory structure.")
