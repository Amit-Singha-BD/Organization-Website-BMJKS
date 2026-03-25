# Organization Website – BMJKS
## Project Overview

This is a voluntary project developed for the Bangladesh Manipuri Youth Welfare Association (BMJKS) to serve the Manipuri community in Bangladesh.  
The website consists of a public front-end website, CMS (Admin Panel), and a WordPress-based blog system to showcase organizational activities, notices, members, services, and donations.

The website was created voluntarily, without any charge, by a team of three members. Two of us developed this project after learning Laravel, to gain real-world experience in full-stack web development.

## Application Overview
### Front-End (Public Website)
#### Home Page
  - Automatic image carousel
  - 3 recent notices
  - President’s photo with a welcome message
  - Services section in carousel format
  - Recent organizational activities

#### About Us Page
  - Organization description
  - Team introduction
  - BMJKS Constitution PDF download

#### Committee Page
  - 12 Manipuri village committees in dropdown menus
  - Clickable branch/committee displays member lists

#### Notice Page
  - Latest 10 notices with pagination
  - Search and date-range filter

#### Services & E-Services Pages
  - Show organizational services
  - Online forms for Lifetime & General Membership applications

#### Tech Team Page
  - Introduces the three developers with photos

#### Other Features
  - Budget, Activities, Lifetime Member List
  - Top Donors List, Recent Donations
  - BMJKS Database & Advanced 16-field search
  - Contact Page with query/proposal submission

### Backend (Admin Panel)
Role-Based Access Control (RBAC)

#### Super Admin
  - Full control over the system
  - Can view, edit, delete any committee, member, activity, notice, or financial record
  - Can manage users, roles, settings, and permissions

#### Branch / Committee Admin
  - Restricted access to their own committee only
  - Can view their committee members and related data
  - Cannot edit or delete members/records from other committees
  - Cannot access unrelated sections of the CMS

#### Dashboard
- Total Lifetime Members
- Total General Members
- Total Active Committee Members
- Website visits statistics
- Tables showing:
  - Active Committee List
  - Recent Notices
  - BMJKS Database overview

#### Notice Management
- Add/View/Edit/Delete notices (based on role)
- Pagination, search, date-range filter

#### Committee Management
- Dropdown menu:
  - Committee List
  - Create Committee
- Active/Inactive toggle for committees
- Clicking a committee shows full members list (role-restricted)
- Members can be View/Edit/Delete (role-restricted)

#### Member Management
- Lifetime & General Member management
- Online application approval
- Create member & member categories
- Advanced search similar to database search
- Access restricted based on role

#### Committee Activities
- Add/View/Edit/Delete activities
- Table view with search and pagination
- Branch admins see only their own committee’s activities

#### Financial Management
- Budget publication, monthly contribution overview
- Contribution settings per branch
- Access restricted based on user role

#### Donation Management
- Donation creation, recent donations, events, donor lists
- Role-based access: branch admins can only see/manage donations for their branch

#### Contact & Settings
- Manage contact messages (seen/unseen/reply)
- Manage services, president message, logo, favicon, carousel images, social links

#### Blog Integration
- WordPress-based blog
- Activities automatically posted from Admin Panel via API

### Project Team

| Name | Role | Description |
|:----------------------------------------------------:|:----------------------------:|:------------------------------------------------------------------------:|
| [Shyamol Singha] (https://github.com/ShyamolSingha)  | Project Oversight            | Coordinated the team and project workflow                                |
| [Roni Singha]    (https://github.com/dev-roni)       | Frontend & Backend/WordPress | Laravel full-stack, CMS, Database management, WordPress blog integration |
| [Amit Singha]    (https://github.com/Amit-Singha-BD) | Frontend & Backend/WordPress | Laravel full-stack, CMS, Database management, WordPress blog integration |

> Two developers had learned Laravel prior to this project and implemented it to gain hands-on experience in full-stack development.

## Key Learnings & Skills Gained
From this project, we learned and practiced:

### Laravel Full-Stack Development
  - CRUD operations with role-based access control
  - Form Request Validation
  - Pagination, Filtering & Search
  - Admin Panel & CMS design

### Database Management
  - Relational database structure
  - Advanced search functionality across multiple fields
  - Handling dynamic content for committees, members, donations, and activities

### Frontend Skills
  - Responsive UI using HTML, CSS, Bootstrap 5
  - Carousels, tables, modals, dropdowns
  - Dynamic content display

### WordPress Integration
  - Using API to post activities to a blog
  - Syncing CMS data with external platform

### Project Management & Teamwork
  - Voluntary collaboration
  - Real-world development workflow
  - Division of responsibilities (Project Manager, Frontend/Backend, WordPress Integration)

## Learning Objectives
This website now serves as:
- A platform to showcase BMJKS activities
- A membership management system with role-based access
- A communication channel between members and the organization
- A voluntary learning experience for the developers