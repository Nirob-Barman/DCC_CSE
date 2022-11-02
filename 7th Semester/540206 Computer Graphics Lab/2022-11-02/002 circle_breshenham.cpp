#include<windows.h>
#include<math.h>
#include<GL/glut.h>

void myInit()
{
    glClearColor(1.0,1.0,1.0,1.0);
    glColor3f(0.0f,0.0f,0.0f);

    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0,640.0,0.0,480.0);
}

void myDisplay()
{
    glClear(GL_COLOR_BUFFER_BIT);
    glPointSize(2.0);

    GLint h=300,k=300,x,y,r,d;
    y=r=150;
    d=r-2*r;

    for(x=0;x<=y;x++)
    {
        glBegin(GL_POINTS);
        {
            glVertex2i(x+h,y+k);
            glVertex2i(x+h,k-y);
            glVertex2i(y+h,x+k);
            glVertex2i(y+h,k-x);
            glVertex2i(-y+h,x+k);
            glVertex2i(-y+h,k-x);
            glVertex2i(-x+h,y+k);
            glVertex2i(-x+h,k-y);
        }
        glEnd();
        if(d<0)
            d=d+4*x+6;
        else
        {
            d=d+4*(x-y)+10;
            y--;
        }
    }

    glFlush();
}

int main(int argc,char** argv)
{
    glutInit(&argc,argv);
    glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
    glutInitWindowSize(640,480);
    glutInitWindowPosition(100,150);
    glutCreateWindow("Line draw using line equation\n");
    glutDisplayFunc(myDisplay);
    myInit();
    glutMainLoop();
    return 1;
}
